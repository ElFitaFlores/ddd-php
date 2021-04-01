Feature: Create a new course
  In order to have courses on the platform
  As a user with admin permissions
  I want to create a new course

  Scenario: A valid non existing course
    Given I send a PUT request to "/courses/fd6de136-d3a2-4e6f-b834-8113281d2a8c" with body:
    """
    {
      "name": "The best course",
      "duration": "5 hours",
    }
    """
    Then the response status code should be 201
    And the response should be empty