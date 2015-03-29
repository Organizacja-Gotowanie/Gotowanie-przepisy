Feature: Web pages

  Scenario: Bigos
    Given I am on homepage
    When I follow "Sałatka Jarzynowa"
    Then I should see "Sałatka Jarzynowa Składniki"
