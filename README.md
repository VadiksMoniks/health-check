## Instalation and Setting Up
Run command
```bash
git clone https://github.com/VadiksMoniks/health-check <your-project-name>
```
to copy the project.
Run command
```bash
docker compose up
```
to download needed images and start application container

## Testing
Use following command:
```bash
curl http://localhost8000/api/v1/health -H "X-Owner 0f60f4a8-e41a-48e8-b1c5-e414f095f5d6"
```
This uuid is randomly generated, you can generate your own and use it.

## Output
API can return next responses:
* ```
      {
        "error": "Missing 'X-Owner' header"
      }
  ```

* ```
      {
        "error": "Invalid UUID"
      }
  ```
* ```
      {
        "db": true,
        "cache": true
      }
  ```
* ```
      {
        "db": true,
        "cache": false
      }
  ```
* ```
      {
        "db": false,
        "cache": true
      }
  ```
* ```
      {
        "db": false,
        "cache": false
      }
  ```
