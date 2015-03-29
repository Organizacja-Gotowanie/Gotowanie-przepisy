Feature: Web pages

  Scenario: Żurek
    Given I am on homepage
    When I follow "Żurek"
    Then I should see "ugotowane jajka"
