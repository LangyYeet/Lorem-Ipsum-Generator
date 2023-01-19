<?php
    // Set the content type to JSON
    header('Content-Type: application/json');

    // Get the input parameters from the request
    $num_paragraphs = $_GET['num_paragraphs'];
    $num_sentences = $_GET['num_sentences'];

    // Generate the Lorem Ipsum text
    $lorem_ipsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna id malesuada tristique, odio erat fringilla urna, vel tincidunt magna nulla ac augue. Sed a risus vel risus tincidunt scelerisque. Sed vel velit vel ipsum faucibus porta. Integer mollis, sapien id malesuada pharetra, nulla magna malesuada magna, non malesuada sapien risus non erat.";
    $lorem_ipsum = str_repeat($lorem_ipsum, $num_sentences);

    // Create the JSON response
    $response = array(
        'num_paragraphs' => $num_paragraphs,
        'text' => $lorem_ipsum
    );
    echo json_encode($response);
?>