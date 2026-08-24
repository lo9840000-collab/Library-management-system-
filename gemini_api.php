<?php

$api_key = "   AQ.Ab8RN6JUWC2n_asPUomUYvKXU50Ssf-bLJBNXw-tUSJxj-bgKQ";

function askAI($question)
{
    global $api_key;

    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-3.6-flash:generateContent";

    $data = [
        "contents" => [
            [
                "parts" => [
                    [
                        "text" => "You are an AI assistant for a Library Management System. Answer library and book related questions simply.\n\nQuestion: " . $question
                    ]
                ]
            ]
        ]
    ];

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "x-goog-api-key: " . $api_key
    ]);

    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    if(curl_errno($ch)){
        return "AI connection error.";
    }

    curl_close($ch);

    $result = json_decode($response, true);

    if(isset($result["candidates"][0]["content"]["parts"][0]["text"])){
        return $result["candidates"][0]["content"]["parts"][0]["text"];
    }

    return "AI could not generate a response.";
}
?>