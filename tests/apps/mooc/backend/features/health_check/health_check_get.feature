Feature: API status
  In order to know the server is up and running
  As a health check
  I want to check the API status

  Scenario: Check the API status
    Given I send a GET request to "/health-check"
    Then the response content should be:
    """
    {
      "mooc-backend": "ok",
      "rand": 1,
    }
    """