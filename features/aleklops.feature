Feature: Web pages

  Scenario: Ale klops!
    Given I am on homepage
    When I follow "Ale klops!"
    Then I should see "2 zmielone cebule"
