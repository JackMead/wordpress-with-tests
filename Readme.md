# WP with test example

Quick exploration of adding unit tests to a wordpress install.

This very likely does not follow good practice.

Should be able to be run with `docker compose up`
* On first run, the wordpress site will generate the wordpress core code which will be added to the host machine
* The test can then run after that has happened
* The test doesn't pass currently, as it relies on other functions not yet loaded.
  * It would likely be better testing isolated self-written code, rather than trying to hook into existing WP code
  * Unit tests written by WP to test their code can be found at https://github.com/WordPress/wordpress-develop/tree/trunk