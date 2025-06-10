# traw-typo3
Setup for testing TRAW extensions


Examples and Theme can be found in [EXT:traw_theme](https://github.com/thomasrawiel/traw-typo3/tree/main/packages/traw-theme)


## Installation
Clone the repository and run 
`ddev start && ddev auth ssh && ddev composer install`

Import the db `ddev import-db -f .Build/traw-typo3.sql.gz`

Run `ddev launch`

Admin:
traw-admin // Traw1$Admin
