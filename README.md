[![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)](LICENSE)
[![Website](https://img.shields.io/badge/site-myapi.rest-0EA5E9)](https://myapi.rest)
[![Discussions](https://img.shields.io/badge/discussions-join-2563EB)](https://github.com/myapi-rest/myapi.rest/discussions)
[![myapi.rest Suite](https://img.shields.io/badge/myapi.rest-API%20Suite-0F766E)](https://github.com/myapi-rest)

# myapi.rest — QR Code API

Generate customizable QR codes through a simple, fast REST API.

## Features
- Supports PNG, JPG, and SVG output  
- Custom colors, margins, and ECC levels  
- Logo overlay support  
- Lightweight and developer-friendly  

## Quick Example

```bash
curl --location 'https://api.myapi.rest/api/qrcode/generate' \
  --header 'Authorization: Bearer <API_KEY>' \
  --header 'Content-Type: application/json' \
  --data '{
    "data": "https://myapi.rest",
    "output_format": "PNG",
    "pixels_per_module": 20,
    "margin": 0,
    "ecc_level": "H"
  }'
```

**Sample response:**

```json
{
  "id": 5,
  "qrcode": "<BASE_64_DATA>"
}
```

## Documentation
See the [`/docs`](./docs) folder for full usage guides, examples, errors, and endpoint details.

## Examples
Language examples are available in the [`/examples`](./examples) directory, including:
- C#
- JavaScript
- Python
- PHP
- Postman Collection

## myapi.rest Suite

This API is part of the broader **myapi.rest** developer suite.  
For all APIs, documentation, and examples, visit:

👉 https://github.com/myapi-rest/myapi.rest
