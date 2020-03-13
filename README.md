# WooCommerce: Add a Custom Download File @ My Account

If you sell no downloadable products, the Downloads section of the WooCommerce My Account page will always be empty. Besides, if you do sell downloadable products but customers never purchased such items, the same will happen.

So, what if you wanted to grant at least a default download file to all your customers? Well, the “woocommerce_customer_get_downloadable_products” WooCommerce filter allows us to add files to the list (empty or non empty) of customer downloadable files. Here’s how it’s done!

<img src="https://businessbloomer.com/wp-content/uploads/2020/01/woocommerce-custom-default-download-file-my-account.png">

First of all, you’ll need to place your downloadable file on a public URL. I chose the /wp-content folder, the one where also images are stored in WordPress.

Then, define the “product name”, the download button label, and you’re good to go. This will open the file inside the browser (forcing a secure download is much more complicated).

# Note:
Add this code into function.php in theme folder
