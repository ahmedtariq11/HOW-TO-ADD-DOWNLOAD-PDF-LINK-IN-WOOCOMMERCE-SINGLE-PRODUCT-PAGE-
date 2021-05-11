add_action('woocommerce_before_single_product_summary','download_pdf',11);
function download_pdf()
{
    echo "<a href='add_your_pdf_link' target='_blank'>Download PDF</a>"; 
}
