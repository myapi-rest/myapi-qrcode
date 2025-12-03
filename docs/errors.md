# Errors — QR Code API

Errors use the standard myapi.rest structure:

```json
{
  "type": "https://tools.ietf.org/html/rfc9110#section-15",
  "title": "Invalid request",
  "status": 400,
  "detail": "data field is required",
  "instance": "/api/qrcode/generate"
}
```

## Common status codes

| Status | Meaning                |
|--------|------------------------|
| 400    | Invalid request        |
| 401    | Unauthorized           |
| 403    | Forbidden              |
| 404    | Not found              |
| 429    | Rate limit exceeded    |
| 500    | Internal server error  |
