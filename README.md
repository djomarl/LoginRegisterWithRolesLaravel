# Laravel Examen Template - Role-Based Auth & CRUD Ready

Dit project is een solide basis voor ons examen. Het bevat al een volledig werkend inlog- en registratiesysteem met rollen (Beheerder/Gebruiker), zodat we direct kunnen beginnen met de specifieke CRUD-eisen van het examen.

## 📋 Wat zit er in dit template?

* **Authenticatie:** Registreren en inloggen op basis van `username` in plaats van e-mail.
* **Role-Based Access Control (RBAC):**
    * **Beheerder:** Heeft toegang tot alle onderdelen.
    * **Gebruiker:** Heeft beperkte toegang.
* **Middleware:** Een aangepaste `CheckRole` middleware die routes beveiligt op basis van de rol in de database.
* **Dashboards:** Gescheiden views voor Beheerders en Gebruikers.
* **Vite & Tailwind:** De frontend is al geconfigureerd voor styling.

---

## 🚀 Installatie Handleiding

Volg deze stappen om het project op jouw laptop werkend te krijgen:

1.  **Clone de repository:**
    ```bash
    git clone [LINK_NAAR_DEZE_REPO]
    cd LoginRegisterWithRolesLaravel
    ```

2.  **Voer het setup-script uit:**
    Ik heb een speciaal script toegevoegd in `composer.json` dat alles in één keer regelt (installeren, .env aanmaken, key genereren, migraties):
    ```bash
    composer run setup
    ```

3.  **Start de applicatie:**
    Open twee terminals:
    * Terminal 1 (PHP server): `php artisan serve`
    * Terminal 2 (Frontend/Vite): `npm run dev`

---

## 🛠️ Hoe we dit gebruiken tijdens het examen

### 1. Nieuwe CRUD's toevoegen
Wanneer we horen wat we moeten maken (bijv. "Producten" of "Bestellingen"), maken we simpelweg een model, migratie en controller aan:
```bash
php artisan make:model Product -mcr
