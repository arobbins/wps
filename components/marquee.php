<?php 

$Products = ShopWP\Factories\Render\Products\Products_Factory::build();

?>

<section class="component-marquee angled-down l-row">
    <div class="marquee-content l-row">
        <div class="shape"></div>
        <div class="marquee-demo">
            <div class="marquee-demo-inner">
                <?php 
        
                $Products->products([
                    'title' => 'Super awesome t-shirt',
                    'variant_style' => 'buttons',
                    'show_zoom' => true,
                    'show_price_range' => false
                ]);
                
                ?>
            </div>
        </div>

        <div class="fade-in-up marquee-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="120" viewBox="0 0 376.3 117"><path fill="white" clip-rule="evenodd" d="M116.2 51.1c-1.9 5.8-3.9 11.6-5.8 17.4-.6 1.8-1.2 3.7-1.8 5.5-.2.5-.2 1.2-.9 1.3-.9.1-.8-.8-1-1.3-2.8-8.4-5.5-16.9-8.2-25.3-.4-1.2-.8-2.4-1.3-3.5-1-2.3-2.5-3.8-5.2-3.9-.6 0-1.5.2-1.4-.9.1-1.2 1-.7 1.6-.7h14.7c.5 0 1.3-.4 1.4.7.1 1.2-.8.9-1.4 1-3.5.5-4.2 1.5-3.2 4.9 1.8 5.6 3.6 11.3 5.6 17.3 1.5-4.4 2.9-8.5 4.2-12.5 1.1-3.4 2.3-6.8 3.4-10.1.2-.6.2-1.3 1.1-1.3 1-.1 1.1.7 1.3 1.3 2.2 6.8 4.5 13.5 6.7 20.3.2.6.2 1.2.9 1.8 1.5-4.3 2.9-8.5 4.3-12.8.6-1.7 1.3-3.4 1.6-5.2.4-2.3-.2-3.2-2.6-3.6-.8-.2-2.3.5-2.2-1 .1-1.5 1.5-.7 2.3-.7 3.7-.1 7.4-.1 11.1 0 .6 0 1.5-.4 1.5.8 0 1-.8.9-1.3.9-3.7 0-5.3 2.4-6.3 5.5l-9 26.7c-.1.2-.1.5-.2.7-.2.5-.1 1.2-.9 1.3-.9.1-.9-.8-1-1.3l-6.9-21c-.2-.6-.4-1.2-.6-1.7-.2-.6-.4-.6-.5-.6zM322.8 69.4v-4.3c0-.5-.2-1.1.6-1.1.7-.1 1 .2 1.1.9.3 1.4.7 2.7 1.6 3.8 2.1 2.9 5 4 8.5 3.5 1.5-.2 2.7-1.1 3.2-2.6.5-1.6-.1-2.8-1.2-3.9-1.4-1.3-3.1-2.1-4.8-2.9-1.8-.9-3.7-1.6-5.3-2.7-3-2.1-4.3-5.4-3.4-8.3.9-2.8 3.9-5 7.3-5.2 2.2-.1 4.3.1 6.1 1.4 1 .7 1.4.4 1.7-.6.2-.6.5-1 1.2-.9.9.1.7.8.7 1.3v6.4c0 .6.4 1.5-.7 1.7-1.2.2-1.1-.7-1.3-1.4-.8-3-2.5-5-5.7-5.4-1.1-.1-2.1 0-3.1.5-2.3 1.1-2.7 3.5-.8 5.2 1.2 1.1 2.6 1.6 4 2.4 1.7.9 3.5 1.7 5.2 2.6 3.5 1.9 5.2 4.9 4.7 8-.6 3.7-3.6 6.5-7.5 7.1-2.9.5-5.7 0-8.1-1.7-1.2-.8-1.7-.6-2.1.7-.2.6-.3 1.5-1.3 1.2-.9-.2-.5-1-.5-1.6-.2-1.4-.1-2.7-.1-4.1zM347.3 69.5V65c0-.5-.1-1 .7-1 .7 0 .8.3 1 .9.3 1 .6 2.1 1.1 3 1.7 3.2 5.2 5 8.8 4.4 1.6-.2 2.9-1 3.4-2.6.6-1.7-.1-3.1-1.4-4.2-1.9-1.6-4.2-2.4-6.4-3.5-1.4-.7-2.8-1.3-4.1-2.3-2.4-2.1-3.8-4.6-2.8-7.8.9-3.3 3.5-4.8 6.7-5.2 2.3-.4 4.7 0 6.7 1.3.9.6 1.5.6 1.8-.5.2-.7.6-1.1 1.3-.9.7.2.5.8.5 1.2v7c0 .6 0 1.1-.8 1.2-.7 0-.9-.3-1.1-1-.8-3.1-2.3-5.4-5.8-5.9-1.2-.2-2.3 0-3.3.5-2.2 1.1-2.5 3.4-.8 5.1.8.7 1.7 1.2 2.7 1.7 2.2 1.1 4.4 2.1 6.5 3.3 3.6 1.9 5.3 5 4.7 8.2-.6 3.6-3.7 6.4-7.6 7-2.8.4-5.5 0-7.9-1.7-1.1-.8-1.7-.7-2.1.6-.2.6-.3 1.5-1.3 1.3-1.1-.2-.5-1.1-.6-1.7 0-1.4.1-2.6.1-3.9zM220.8 48.1c-6.2-1.4-12.5-.5-18.7-.7-.5 0-1.4-.3-1.4.7 0 1.1.8.7 1.4.8 1.8.2 3.4.8 3.5 2.9.5 5.9.5 11.8 0 17.6-.1 1.5-1.1 2.4-2.6 2.7-2.8.6-5.2-.4-7.3-2-2.8-2.1-4.8-4.9-7.4-7.5 1-.3 1.7-.5 2.3-.7 4.1-1.6 6.2-5.4 4.8-9.1-1.2-3.3-3.9-4.7-7.1-5.1-5.4-.8-10.9-.2-16.3-.3-.6 0-.9.2-.9.8 0 .8.6.6 1.1.7 3.3.6 3.8.9 4 4.3.3 5 .3 10 0 15-.2 3.1-.8 3.6-3.8 4.1-.5.1-1.2-.2-1.2.8s.8.8 1.3.8h13c.5 0 1.4.4 1.5-.6.1-1.2-.8-.8-1.4-.9-2.7-.4-3.3-1-3.6-3.7-.2-1.4-.2-2.9-.2-4.3 0-.5-.3-1.2.5-1.5.7-.2 1.1.3 1.5.8 1.7 2.1 3.6 4.1 5 6.4 2 3.2 4.6 4.2 8.4 4 7.2-.4 14.5.3 21.8-.4 6.1-.6 10.7-4.2 12-9.2 1.8-7.8-2.3-14.6-10.2-16.4zm-39.3 9v-1.9c0-1.2.1-2.5 0-3.7-.1-1.4.4-1.8 1.7-1.6.6.1 1.1 0 1.7 0 3.2.1 5.1 2 5.1 5.2 0 3-1.8 5.1-4.8 5.4-3.7.3-3.7.3-3.7-3.4zM223 68c-1.7 2.8-6.8 4.3-10 3.3-1.1-.3-1.4-1.1-1.5-2.1-.4-3.2 0-6.5-.2-9.2v-8.7c0-1.1.3-1.7 1.5-1.5.4.1.9 0 1.3 0 3.9-.1 7.7.4 9.5 4.5 2.1 4.6 2.1 9.3-.6 13.7zM317.2 66.6c-1.1-.2-.9 1-1.1 1.6-.5 1.7-1.6 2.8-3.4 3-2.3.4-4.6.3-6.9.1-1.3-.1-2.1-.9-2.5-2.2-.6-2.4-.3-4.7-.3-7.1 0-.3 0-.6.4-.7 2.5-1 5.8.8 6.2 3.4.1.5-.2 1.2.8 1.2s.8-.8.8-1.4v-9c0-.5.4-1.3-.7-1.4-1.1-.1-.8.7-.9 1.3-.2 1.2-.3 2.5-1.8 3-1.4.4-2.7.3-4.1.4-.8 0-.7-.5-.7-1V51c0-.8.3-1.1 1.1-1.1 1.6.1 3.1.1 4.7 0 3 0 5.5.6 6 4.2.1.4.3.8.9.8.8-.1.5-.7.5-1.1-.1-1.6-.3-3.2-.3-4.9 0-1.1-.4-1.5-1.5-1.5h-20.5c-.5 0-1.4-.3-1.4.7-.1 1 .8.8 1.3.9 2 .1 3.5.9 3.6 3.1.3 5.7.3 11.4 0 17.1-.1 2.4-1.9 3.5-4.4 3.1-1.4-.2-2.6-.8-3.8-1.6-3.1-2.1-5.3-5.2-8.1-8 1.6-.5 2.9-.9 4.1-1.6 4.7-3 4.6-9.2-.2-12-1.3-.8-2.7-1.2-4.2-1.4-5.1-.5-10.3-.1-15.4-.2-.6 0-1.4-.3-1.4.7 0 1.1.8.7 1.4.8 2.8.5 3.6 1.2 3.6 4 .1 5.1.1 10.3 0 15.4 0 2.7-.9 3.5-3.6 3.9-.6.1-1.6-.3-1.4.9.1 1 .9.6 1.5.6h12.8c.6 0 1.5.4 1.5-.8 0-1-.9-.7-1.4-.8-2.7-.4-3.4-1.1-3.7-3.9-.1-1.4-.1-2.8-.1-4.1 0-.5-.3-1.2.3-1.5.8-.3 1.2.3 1.7.8 2.4 3 4.9 6.1 7.3 9.1.5.7 1 1.1 2 1.1h30.3c.9 0 1.4-.1 1.4-1.2 0-1.4.3-2.9.3-4.3-.3-.4.3-1.4-.7-1.6zm-42.3-6.2c-.6-.2-.5-.6-.5-1v-4.3c0-.4-.1-.9 0-1.3.5-1.3-1.4-3.6 1.1-3.9 4.5-.5 6.7.9 7.2 4.1.6 4.7-3.3 7.9-7.8 6.4zM261.4 46.4c-1.4-4.1-4.7-5.8-8.6-6.6-3.5-.7-7-.2-9.9-.3h-8.8c-.6 0-1.3-.3-1.3.8 0 1 .8.8 1.3.9.2 0 .4 0 .6.1 2.8.3 3.9 1.4 4.1 4.2.6 7.1.5 14.1.1 21.2-.3 4.6-.7 4.9-5.2 5.7-.6.1-.9.2-.9.9s.4.8 1 .8h16.3c.6 0 1-.2 1-.8 0-.7-.4-.8-1-.8h-.6c-3-.3-3.9-1.1-4.5-4.1-.4-2.4-.1-4.8-.3-7.1-.1-1.5.3-2.1 1.9-2 3.2.1 6.4.1 9.4-1.2 4.7-2.3 7-7 5.4-11.7zm-11.1 9.7c-5.5.8-5.3.8-5.3-4.7v-2.1c0-1.9-.1-3.8-.2-5.6 0-1.1.2-1.4 1.3-1.3 1.2.1 2.3 0 3.5 0 3.6.1 5.9 2.5 6.1 6.3.2 4.3-1.6 6.9-5.4 7.4zM162.4 48.8c-6.3-3.6-12.6-3.4-18.6.7-7.8 5.4-8.1 15.9-.6 21.8 3.1 2.4 6.6 3.6 10.7 3.6 2.1 0 4.4-.3 6.5-1.3 5.1-2.3 8.5-6 9.1-11.7.5-5.8-2.2-10.2-7.1-13.1zm.1 17.7c-1.6 3.9-4.8 6-8.9 6-4 0-7.1-2.1-8.7-6-1.6-3.9-1.6-7.9.1-11.9 1.6-3.7 4.4-5.7 8.5-5.7 4.1-.1 7 1.8 8.8 5.5.9 2 1.3 4 1.3 6.2 0 2-.3 4-1.1 5.9z"/><g fill="white" clip-rule="evenodd"><path d="M64.8 40.9c-.8-1.6-1.4-3.2-1.2-5 .4-3.4 2.5-5.3 5.9-5.9-16-15.1-42.7-10.2-52.4 6.8h1.5c3.1-.1 6.1-.2 9.2-.4 1.1-.1 2 .2 2 1.4.1 1.2-.9 1.5-1.9 1.6-.6 0-1.3.1-1.9.1-1.1 0-1.5.2-1.1 1.5C29 53.1 33 65.2 37.1 77.3c.7-.5.7-1.1.8-1.6 2.2-6.5 4.3-13 6.6-19.5.4-1.1.3-2-.1-3.1-1.4-3.6-2.8-7.1-3.9-10.7-.6-2.1-1.6-3.2-3.9-3-1 .1-2.2-.2-2.1-1.5.1-1.5 1.2-1.5 2.4-1.4 4.5.4 9 .4 13.5.3 1.4-.1 2.7-.2 4.1-.3 1-.1 1.6.4 1.6 1.4.1.9-.5 1.4-1.4 1.5-.7.1-1.5.2-2.2.2-1.4 0-1.7.4-1.2 1.8 2.6 7.6 5.1 15.1 7.7 22.7 1.5 4.3 2.9 8.7 4.4 13 2.2-6.3 4.2-12.7 5.9-19 1.1-4.2.3-8.2-1.7-12-.9-1.8-1.9-3.5-2.8-5.2z"/><path d="M87.1 53.8c-.8-21.5-20.2-39.4-42-38.7-23.4.8-40.8 19.6-40 43.3.7 21.6 20.2 39.6 42 38.8 23.5-.8 40.8-19.7 40-43.4zM46 95.4C24.4 95.3 6.9 77.7 7 56.1 7 34.5 24.6 17 46.1 17c21.6 0 39.2 17.6 39.2 39.2-.1 21.6-17.7 39.2-39.3 39.2z"/></g><path fill="white" clip-rule="evenodd" d="M46.7 59.3c2.7 7.2 5.1 14 7.6 20.8 1 2.8 2 5.5 3 8.3.3.8.2 1.2-.7 1.4-6.4 1.9-12.8 2.1-19.3.5-1.1-.3-1.3-.6-.9-1.6C40 79 43.3 69.3 46.7 59.3zM30.6 87.6C13.8 80 6.2 58.6 14 42c5.6 15.2 11.1 30.3 16.6 45.6zM77.7 40.6c9 18.4.1 38.2-13.3 45.4-.5-.4-.1-.8.1-1.2 3.6-10.3 7.1-20.7 10.7-31 1.3-3.8 2.1-7.7 2.1-11.8-.1-.5-.6-1.1.4-1.4z"/><path fill="white" clip-rule="evenodd" d="M77.7 40.6c-.6.4-.1 1.1-.4 1.5-.3-.7-.4-1.5-.2-2.3.4.1.5.4.6.8z"/></svg>
            
            <h1>Sell Shopify Products on <span>WordPress</span>.</h1> 
            <p>Display a simple buy button&mdash;or build a complex storefront. Power your WordPress store with a world-class ecommerce experience.</p>
            <div class="l-row l-col-center marquee-buttons">
                <p class="link btn-demo-click">
                    <i class="desktop">👈</i>
                    <i class="mobile">👇</i> 
                    <span>Try a live demo</span>
                </p>
                <span>or</span>
                <a href="/checkout/?edd_action=add_to_cart&download_id=35&edd_options[price_id]=2" class="btn btn-l">Buy now 
                    <span>$199/year</span>
                </a>
            </div>
        </div>

    </div>
</section>