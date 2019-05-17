# OpenAPI Tester

Small package to test OpenAPI specifications against functional tests.

## Motivations
As an REST API developer, I migrated to OpenAPI 3 a few weeks after the release of the v3.0 version. I tried to use standard json schema validator, but since OpenAPI diverges from json schema a certain points, covering the gap was a huge pain.

This small package is my personal contribution to the OpenAPI community.

## Supported specification formats
While I am nearly certain that everybody uses the YAML syntax, JSON is supported as well.

For now, only responses verifications are available, but I plan to support request as well.

## Structure

