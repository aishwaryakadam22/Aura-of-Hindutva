<?php
require_once('tcpdf/tcpdf.php');
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $order_query = mysqli_query($conn, "SELECT * FROM `orders` WHERE id = '$id'") or die('query failed');
    $order = mysqli_fetch_assoc($order_query);

    if (!$order) {
        die('Order not found');
    }

    // Calculate CGST, SGST, GST, and total amount
    $cgst = $order['total_price'] * 0.09; // Assuming 9% CGST
    $sgst = $order['total_price'] * 0.09; // Assuming 9% SGST
    $gst = $cgst + $sgst;
    $total_amount = $order['total_price'] + $gst;

    // Create PDF
    $pdf = new TCPDF();
    $pdf->SetAutoPageBreak(true, 15);
    $pdf->AddPage();
    $pdf->SetFont('helvetica', 'B', 14);

    // Customer Details Box
    $pdf->Cell(0, 10, 'Customer Details', 0, 1, 'L');
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(50, 10, 'Name:', 0, 0, 'L');
    $pdf->Cell(0, 10, $order['name'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Phone:', 0, 0, 'L');
    $pdf->Cell(0, 10, $order['number'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Email:', 0, 0, 'L');
    $pdf->Cell(0, 10, $order['email'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Order ID:', 0, 0, 'L');
    $pdf->Cell(0, 10, $order['id'], 0, 1, 'L');
    $pdf->Cell(50, 10, 'Shipping Address :', 0, 0, 'L');
    $pdf->Cell(0, 10, $order['address'], 0, 1, 'L');

    $pdf->Ln(7); // Add some space

    // Subtotal Row
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(100, 10, 'Placed On:', 1, 0, 'L');
    $pdf->Cell(80, 10, $order['placed_on'], 1, 1, 'C');


    // CGST Row
    $pdf->Cell(100, 10, 'Payment method:', 1, 0, 'L');
    $pdf->Cell(80, 10, $order['method'], 1, 1, 'C');
    
    // $pdf->SetFont('helvetica', 'B', 14);
    // $pdf->Cell(50, 10, 'Placed On:', 0, 1, 'L');
    // $pdf->SetFont('helvetica', '', 12);
    // $pdf->Cell(0, 10, $order['placed_on'], 0, 1, 'L');
    // $pdf->Cell(50, 10, 'Payment method:', 0, 0, 'L');
    // $pdf->Cell(0, 10, $order['method'], 0, 1, 'L');

    $pdf->Ln(7); // Add some space

    // Ordered Books Box
    $pdf->SetFont('helvetica', 'B', 14);
    $pdf->Cell(0, 10, 'Ordered Books:', 0, 1, 'L');
    $pdf->SetFont('helvetica', '', 13);
    $pdf->MultiCell(0, 10, $order['total_products'], 0, 'L');

    // Billing Table
    $pdf->Ln(10); // Add some space
    $pdf->SetFont('helvetica', 'B', 12);

    // Header Row (Bold and Highlighted)
    $pdf->SetFillColor(200, 200, 200);
    $pdf->Cell(100, 10, 'Description', 1, 0, 'C', 1);
    $pdf->Cell(80, 10, 'Amount ', 1, 1, 'C', 1);

    // Subtotal Row
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(100, 10, 'Subtotal', 1, 0, 'L');
    $pdf->Cell(80, 10, number_format($order['total_price'], 2), 1, 1, 'C');

    // CGST Row
    $pdf->Cell(100, 10, 'CGST (9%)', 1, 0, 'L');
    $pdf->Cell(80, 10, number_format($cgst, 2), 1, 1, 'C');

    // SGST Row
    $pdf->Cell(100, 10, 'SGST (9%)', 1, 0, 'L');
    $pdf->Cell(80, 10, number_format($sgst, 2), 1, 1, 'C');

    // Total Row
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(100, 10, 'Total (incl. GST)', 1, 0, 'L');
    $pdf->Cell(80, 10, number_format($total_amount, 2), 1, 1, 'C');

    // Output the PDF as a download
    $pdf->Output('invoice.pdf', 'D');
} else {
    die('Order ID not provided');
}
?>
