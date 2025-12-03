# Endpoints — QR Code API

Base URL: `https://api.myapi.rest`

---

## POST `/api/qrcode/generate`

Generate a QR code.

### Request body

| Field             | Type    | Required | Description                                 |
|-------------------|---------|----------|---------------------------------------------|
| data              | string  | Yes      | The content encoded into the QR code.       |
| output_format     | string  | Yes      | PNG, JPG, or SVG.                           |
| pixels_per_module | number  | No       | Size of each QR module.                     |
| margin            | number  | No       | Margin/quiet zone around the QR code.       |
| ecc_level         | string  | No       | Error correction level (L, M, Q, H).        |
| dark_color_hex    | string  | No       | Foreground color (e.g. `#000000`).          |
| light_color_hex   | string  | No       | Background color (e.g. `#FFFFFF`).          |
| draw_quiet_zones  | bool    | No       | Whether to include quiet zones.             |
| image_base64      | string  | No       | Optional base64 image to integrate.         |
| logo_size_percent | number  | No       | Logo scaling percentage (if logo is used).  |

### Success response (200 OK)

```json
{
  "id": 5,
  "qrcode": "<BASE_64_DATA>"
}
```

`qrcode` is a base64-encoded string representing the generated image.

### Error response example

```json
{
  "type": "https://tools.ietf.org/html/rfc9110#section-15",
  "title": "Invalid request",
  "status": 400,
  "detail": "data field is required",
  "instance": "/api/qrcode/generate"
}
```
