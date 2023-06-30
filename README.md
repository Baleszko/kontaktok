A Symfonyt composerrel telepítettem, majd behúztam a webapp packaget hozzá.
Az annotations csomagot telepítettem a routinghoz, a MakerBundlet a Controllerek és Entityk generálásához,
Az Encoret a Webpack telepítéséhez, amivel behúztam a Bootstrapet.
A Doctrin orm használatához a symfony/orm-packet telepítettem.
A formhoz a symfony/form csomagot.

Első alkalom:
Composer install
npm install

Az egyszerűbb beállítások miatt a .env fájlt is feltöltöttem githubra.

A következő parancsokkal létre lehet hozni az adatbázist(Én xamppot telepítettem, szóval MariaDB-t használtam), majd le kell futtatni a migrációs fájlokat:

php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate

Dev server:
symfony server:start
npm run dev-server
