A Symfonyt composerrel telepítettem, majd behúztam a webapp packaget hozzá.
Az annotations csomagot telepítettem a routinghoz, a MakerBundlet a Controllerek és Entityk generálásához,
az Encoret a Webpack telepítéséhez, amivel behúztam a Bootstrapet.
A Doctrin orm használatához a symfony/orm-packet telepítettem.

Első alkalom:
Composer install
npm install

Adatbázis generálási beállítások:
db_név: contacts
DATABASE_URL="mysql://"felhasználónév":"jelszó"@127.0.0.1:3306/"db_név"?serverVersion=10.11.2-MariaDB&charset=utf8mb4"

webpack.config.js Scss engedéjezése, .enableSassLoader(); kikommentezés
// enables Sass/SCSS support
.enableSassLoader();

Dev server:
symfony server:start
npm run dev-server
