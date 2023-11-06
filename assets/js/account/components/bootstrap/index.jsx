/** @jsx jsx */
import { jsx, css } from '@emotion/react'
import { Routes, Route, useNavigate } from 'react-router-dom'
import Account from '../account/index.jsx'
import AccountHome from '../account/home'
import AccountLicenses from '../account/licenses'
import AccountSubscriptions from '../account/subscriptions'
import AccountPurchases from '../account/purchases'
import AccountDownloads from '../account/downloads'
import AccountAffiliate from '../account/affiliate'
import { AccountContext } from '../account/_state/context'
import { getCustomer } from '../_common/api'
import to from 'await-to-js'
const { useEffect, useContext } = wp.element

function Bootstrap() {
	const [accountState, accountDispatch] = useContext(AccountContext)
	const navigate = useNavigate()

	const LoadingSubsText = css`
		position: absolute;
		top: 45%;
		left: 50%;
		text-align: center;
		transform: translate(-50%, -50%);

		p {
			margin-top: 5px;
			padding-left: 40px;
		}
	`
	const spin = css`
		@keyframes rotating {
			from {
				transform: rotate(0deg);
			}
			to {
				transform: rotate(360deg);
			}
		}
		position: absolute;
		left: 0px;
		width: 25px;
		display: inline-block;
		margin-right: 10px;
		animation: rotating 2s linear infinite;
	`
	function getActivePage(pathname) {
		if (pathname === '/') {
			return 'dashboard'
		}

		const params = new Proxy(new URLSearchParams(window.location.search), {
			get: (searchParams, prop) => searchParams.get(prop),
		})

		let accountPageParam = params.accountpage

		if (accountPageParam) {
			navigate('/' + accountPageParam)

			return
		}

		return pathname.substring(1)
	}

	useEffect(() => {
		var activePage = getActivePage(window.location.pathname)

		accountDispatch({
			type: 'SET_ACTIVE_PAGE',
			payload: activePage,
		})
	}, [accountDispatch])

	const AccountInnerCSS = css`
		height: 100vh;
	`

	async function getCust() {
		const [error, customer] = await to(getCustomer())

		if (error) {
			accountDispatch({
				type: 'SET_NOTICE',
				payload: {
					message: JSON.stringify(error),
					type: 'error',
				},
			})

			return
		}

		if (!customer.success) {
			accountDispatch({
				type: 'SET_NOTICE',
				payload: {
					message: customer.data,
					type: 'error',
				},
			})
			return
		}

		accountDispatch({ type: 'SET_CUSTOMER', payload: customer.data })
		accountDispatch({
			type: 'SET_SUBSCRIPTIONS',
			payload: customer.data.subscriptions,
		})
	}

	useEffect(() => {
		getCust()
	}, [])

	return accountState.customer ? (
		<div css={AccountInnerCSS}>
			<Routes>
				<Route
					exact
					path='/'
					element={
						<Account>
							<AccountHome />
						</Account>
					}
				/>

				<Route
					path='/licenses'
					element={
						<Account>
							<AccountLicenses />
						</Account>
					}
				/>

				<Route
					path='/subscriptions'
					element={
						<Account>
							<AccountSubscriptions />
						</Account>
					}
				/>

				<Route
					path='/purchases'
					element={
						<Account>
							<AccountPurchases />
						</Account>
					}
				/>

				<Route
					path='/downloads'
					element={
						<Account>
							<AccountDownloads />
						</Account>
					}
				/>

				<Route
					path='/affiliate'
					element={
						<Account>
							<AccountAffiliate />
						</Account>
					}
				/>

				<Route>{'No route matched!'}</Route>
			</Routes>
		</div>
	) : (
		<div css={LoadingSubsText}>
			<svg
				width='150'
				version='1.1'
				id='Layer_1'
				xmlns='http://www.w3.org/2000/svg'
				x='0'
				y='0'
				viewBox='0 0 731.9 189.4'
				xmlSpace='preserve'>
				<circle cx='91.2' cy='95.2' r='89.2' fill='#0c0e1b' />
				<path
					fill='white'
					d='M77.5 54.4c2.7-6.8 8.7-11.5 15.4-11.5 6.8 0 12.7 4.7 15.4 11.5h7.2c-3-11.4-12-19.6-22.5-19.6-10.6 0-19.5 8.2-22.7 19.5h7.2zM138.2 65.5H45.9c-2 21.5-3.6 43.1-4.9 64.6.3 2.7 2.1 7.4 9.9 8H133.1c7.7-.6 9.6-5.3 9.9-8-1.2-21.6-2.8-43.1-4.8-64.6zm-18.5 38.2c-2.1 6.6-6 12.2-11.2 15.9-4.8 3.5-10.6 5.4-16.5 5.4h-.2c-5.8-.1-11.4-2-16.1-5.4-5.3-3.8-9.1-9.3-11.2-15.9l-.6-2h12l.3.7c2.8 6.9 9 11.3 16 11.3h.3c6.9-.1 13-4.4 15.7-11.3l.3-.7h12l-.8 2z'
				/>
				<path d='M249 130.6c-10 0-21.1-3.3-30.6-10.8l8.6-13.3c7.7 5.6 15.8 8.5 22.5 8.5 5.9 0 8.5-2.1 8.5-5.3v-.3c0-4.4-6.9-5.9-14.8-8.2-10-2.9-21.3-7.6-21.3-21.4v-.3c0-14.5 11.7-22.6 26.1-22.6 9 0 18.9 3.1 26.6 8.2l-7.7 14c-7-4.1-14.1-6.6-19.3-6.6-4.9 0-7.4 2.1-7.4 4.9v.3c0 4 6.8 5.9 14.5 8.5 10 3.3 21.5 8.1 21.5 21.1v.3c0 15.8-11.8 23-27.2 23zM335.8 129.3V89.5c0-9.6-4.5-14.5-12.2-14.5S311 79.9 311 89.5v39.8h-20.2V32.2H311v35.9c4.7-6 10.6-11.4 20.9-11.4 15.3 0 24.2 10.1 24.2 26.5v46.1h-20.3zM408.6 130.9c-22.1 0-38.4-16.4-38.4-36.8v-.3c0-20.5 16.5-37.1 38.7-37.1 22.1 0 38.4 16.4 38.4 36.8v.3c0 20.5-16.5 37.1-38.7 37.1zm18.7-37.1c0-10.5-7.6-19.7-18.8-19.7-11.6 0-18.5 8.9-18.5 19.4v.3c0 10.5 7.6 19.7 18.8 19.7 11.6 0 18.5-8.9 18.5-19.4v-.3zM504.3 130.6c-10.8 0-17.4-4.9-22.2-10.6v30.6h-20.2V58h20.2v10.2c4.9-6.6 11.7-11.6 22.2-11.6 16.6 0 32.4 13 32.4 36.8v.3c.1 23.9-15.5 36.9-32.4 36.9zm12.3-37.1c0-11.8-8-19.7-17.4-19.7-9.4 0-17.3 7.8-17.3 19.7v.3c0 11.8 7.8 19.7 17.3 19.7 9.4 0 17.4-7.7 17.4-19.7v-.3zM623.5 129.8h-5.6l-20.2-58.1-20.3 58.1h-5.6l-24.9-68.4h7.3l20.5 59.6 20.5-59.8h5.2l20.5 59.8 20.5-59.6h7l-24.9 68.4zM695.6 130.9c-13.6 0-22.3-7.7-27.9-16.2v35.9h-6.5V61.5h6.5v15.2c5.9-8.9 14.5-16.8 27.9-16.8 16.4 0 33 13.2 33 35.2v.3c0 22-16.7 35.5-33 35.5zm25.9-35.5c0-17.8-12.4-29.3-26.6-29.3-14.1 0-27.7 11.8-27.7 29.1v.3c0 17.4 13.6 29.1 27.7 29.1 14.8 0 26.6-10.8 26.6-29v-.2z' />
			</svg>
			<p>
				<svg
					xmlns='http://www.w3.org/2000/svg'
					viewBox='0 0 512 512'
					css={spin}>
					<path d='M304 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm0 416a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM48 304a48 48 0 1 0 0-96 48 48 0 1 0 0 96zm464-48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM142.9 437A48 48 0 1 0 75 369.1 48 48 0 1 0 142.9 437zm0-294.2A48 48 0 1 0 75 75a48 48 0 1 0 67.9 67.9zM369.1 437A48 48 0 1 0 437 369.1 48 48 0 1 0 369.1 437z' />
				</svg>
				Loading your ShopWP account ...
			</p>
		</div>
	)
}

export default Bootstrap
