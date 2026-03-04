# Laravel Examen Template - Role-Based Auth & CRUD Ready

Dit project dient als basis voor ons examen. Het bevat een volledig werkend inlog- en registratiesysteem met rollen, zodat we direct kunnen focussen op de CRUD-eisen van de opdracht.

## 📋 Kenmerken & Inhoud
* **Authenticatie:** Registreren en inloggen op basis van `username`.
* **Role-Based Access Control (RBAC):**
    * `Beheerder`: Volledige toegang tot alle onderdelen.
    * `Gebruiker`: Beperkte toegang tot specifieke dashboards.
* **Middleware:** Beveiliging via de `CheckRole` middleware.
* **Frontend:** Klaar voor gebruik met Tailwind CSS en Vite.

---

## 🛠️ Installatie & Setup

Volg deze stappen om het project op jouw laptop werkend te krijgen:

1.  **Clone de repository:**
    ```bash
    git clone [REPO_URL]
    cd LoginRegisterWithRolesLaravel
    ```

2.  **Voer het automatische setup-script uit:**
    In de `composer.json` is een script toegevoegd dat alle installatiestappen (pakketten, .env, app-key) in één keer regelt:
    ```bash
    composer run setup
    ```

3.  **Start de applicatie:**
    Open twee terminals (of gebruik `composer run dev` als je alles in één terminal wilt zien):
    * Terminal 1: `php artisan serve`
    * Terminal 2: `npm run dev`

---

## 🗄️ Database: SQLite

Voor dit examen gebruiken we **SQLite**. Dit is een database die in één bestand leeft (`database/database.sqlite`). Dit bespaart ons tijd omdat we geen MySQL-server (zoals XAMPP) hoeven te configureren.

**Hoe werkt het?**
* **Configuratie:** In je `.env` staat `DB_CONNECTION=sqlite`. De rest van de `DB_` regels zijn niet nodig.
* **Bestand aanmaken:** Als de database nog niet bestaat, maak hem aan met:
    ```bash
    touch database/database.sqlite
    ```
* **Migreren:** Voer `php artisan migrate` uit om de tabellen aan te maken.

---

## 🤝 Samenwerken via GitHub (Tips)

Om te voorkomen dat we elkaars werk overschrijven, spreken we het volgende af:

1.  **Branches:** Werk niet direct in `main`. Maak voor elke nieuwe feature een branch aan:
    ```bash
    git checkout -b feature/naam-van-onderdeel
    ```
2.  **Pull Before Push:** Doe altijd een `git pull` voordat je begint te werken, zodat je de laatste versie van de ander hebt.
3.  **Database:** Het `.sqlite` bestand staat in de `.gitignore`. Dit betekent dat je lokaal je eigen testdata hebt. Als we de tabelstructuur aanpassen, pushen we alleen de **Migration** bestanden. Na een pull moet je dan even `php artisan migrate` draaien.

---

## 🚀 Hoe we verder bouwen tijdens het examen

### Nieuwe CRUD maken
Horen we dat we "Producten" moeten beheren? Voer dit uit:
```bash
php artisan make:model Product -mcr
