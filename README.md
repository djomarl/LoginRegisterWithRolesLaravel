# 🎓 Laravel Examen Template - Role-Based Auth & CRUD Ready

Dit project dient als de ultieme startbasis voor ons examen. Het bevat een volledig werkend inlog- en registratiesysteem met rollen, zodat we geen tijd verliezen en direct kunnen focussen op de specifieke CRUD-eisen van de opdracht.

---

## 📑 Inhoudsopgave

1. [🚀 Starten op het Examen (Template Loskoppelen & Hernoemen)](#1-starten-op-het-examen)
2. [📋 Kenmerken & Inhoud](#2-kenmerken--inhoud)
3. [🛠️ Installatie & Setup (met Laravel Herd)](#3-installatie--setup)
4. [🗄️ Database: SQLite](#4-database-sqlite)
5. [🤝 Samenwerken via GitHub (Tips)](#5-samenwerken-via-github-tips)
6. [🚀 Hoe we verder bouwen (Casus Voorbeeld: Relaties & CRUD)](#6-hoe-we-verder-bouwen)
7. [🎨 Views & Mappenstructuur (Nieuwe schermen maken)](#7-views--mappenstructuur)
8. [🔐 Hoe werkt het Rollensysteem? (Nieuwe rol: bijv. Keuken of Directie)](#8-hoe-werkt-het-rollensysteem)

---

<h2 id="1-starten-op-het-examen">1. 🚀 Starten op het Examen (Template Loskoppelen & Hernoemen)</h2>

<details>
<summary><b>Klik hier voor de stappen om je eigen schone project te starten</b></summary>

<br>

Om te voorkomen dat je in de repository van de template werkt, moet je deze "loskoppelen" en verbinden met je eigen nieuwe examen-repo.

### Stap 1: Clone de template naar een eigen map
Open je terminal in je Herd/Sites map en geef direct de mapnaam op die je wilt (bijv. `examen-jouwnaam`):
```bash
git clone [TEMPLATE_REPO_URL] examen-jouwnaam
cd examen-jouwnaam
```

### Stap 2: Verwijder de Git-historie van de template
Hiermee wis je alle verbindingen met de originele GitHub van de template:
* **Mac/Linux:** `rm -rf .git`
* **Windows (PowerShell):** `Remove-Item -Recurse -Force .git`
* *Of handmatig:* Verwijder de (onzichtbare) map `.git` in je verkenner.

### Stap 3: Initialiseer je eigen Git en link je nieuwe repo
Maak op GitHub een nieuwe, lege repository aan (zonder README of licentie) en voer dit uit:
```bash
git init
git remote add origin [JOUW_NIEUWE_REPO_URL]
git add .
git commit -m "Initial commit van examen template"
git push -u origin main
```

### Stap 4: De Projectnaam veranderen
1. **Mapnaam:** Als je in Stap 1 een mapnaam hebt gekozen, is dat nu je lokale domein (bijv. `http://examen-jouwnaam.test`).
2. **.env bestand:** Open je `.env` en verander de `APP_NAME`:
   ```env
   APP_NAME="Mijn Examen Project"
   ```
3. **Composer (Optioneel):** Verander in `composer.json` de `"name": "djomarl/loginregisterwithroleslaravel"` naar je eigen naam.

</details>

---

<h2 id="2-kenmerken--inhoud">2. 📋 Kenmerken & Inhoud</h2>

<details>
<summary><b>Klik om de projectkenmerken te bekijken</b></summary>

<br>

* **Authenticatie:** Registreren en inloggen op basis van `username`.
* **Role-Based Access Control (RBAC):**
  * `Beheerder`: Volledige toegang tot alle onderdelen en instellingen.
  * `Gebruiker`: Beperkte toegang tot specifieke dashboards.
* **Middleware:** De routes zijn standaard beveiligd via de `CheckRole` middleware.
* **Frontend:** Volledig startklaar met **Tailwind CSS** en **Vite** voor razendsnelle styling.

</details>

---

<h2 id="3-installatie--setup">3. 🛠️ Installatie & Setup (met Laravel Herd)</h2>

<details>
<summary><b>Klik om het stappenplan voor Laravel Herd te bekijken</b></summary>

<br>

Voor dit project gebruiken we **Laravel Herd**. Dit is de allermakkelijkste manier om PHP en Laravel lokaal te draaien.

### Stap 1: Download & Installeer Laravel Herd
1. Ga naar [herd.laravel.com](https://herd.laravel.com/) en installeer de gratis versie.

### Stap 2: Voer het setup-script uit
In de `composer.json` is een handig script toegevoegd dat alles in één keer voor je regelt:
```bash
composer run setup
```
*Dit regelt: `.env` aanmaken, `composer install`, `key:generate`, de SQLite database aanmaken en de tabellen migreren + seeden.*

### Stap 3: Bekijk de website!
Jouw website is direct bereikbaar via de naam van je map, gevolgd door `.test`. 
* Bijv: **`http://examen-jouwnaam.test`**

### Stap 4: Tailwind CSS (Vite) aanzetten
Open één terminal venster in je project en laat dit commando open staan:
```bash
npm run dev
```

</details>

---

<h2 id="4-database-sqlite">4. 🗄️ Database: SQLite</h2>

<details>
<summary><b>Klik om te zien hoe de SQLite database werkt</b></summary>

<br>

We gebruiken **SQLite**. Dit leeft in het bestand `database/database.sqlite`.

**Hoe werkt het?**
1. **Configuratie:** In je `.env` staat `DB_CONNECTION=sqlite`. De rest van de `DB_` regels mag je negeren.
2. **Bestand aanmaken:** Als de database nog niet bestaat: `touch database/database.sqlite`.
3. **Migreren & Seeden:** Voer `php artisan migrate --seed` uit.

</details>

---

<h2 id="5-samenwerken-via-github-tips">5. 🤝 Samenwerken via GitHub (Tips)</h2>

<details>
<summary><b>Klik voor onze afspraken rondom versiebeheer</b></summary>

<br>

1. **Gebruik Branches:** Werk voor elke nieuwe taak in een eigen branch: `git checkout -b feature/naam`.
2. **Pull Before Push:** Doe altijd een `git pull origin main` voordat je begint.
3. **Lokale Database:** Het `.sqlite` bestand staat in de `.gitignore`. We pushen alleen de migratiebestanden.

</details>

---

<h2 id="6-hoe-we-verder-bouwen">6. 🚀 Hoe we verder bouwen (Casus Voorbeeld: Relaties & CRUD)</h2>

<details>
<summary><b>Klik voor een complete gids over het aanmaken van CRUD's en Relaties</b></summary>

<br>

Stel de casus is: **"Een gebruiker moet een reservering kunnen plaatsen."**

### Stap 1: Genereer alle basisbestanden
```bash
php artisan make:model Reservation -mcr
```

### Stap 2: Pas de bestanden aan

#### 1. De Migratie (`database/migrations/xxxx_create_reservations_table.php`)
```php
public function up(): void
{
    Schema::create('reservations', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->cascadeOnDelete(); 
        $table->string('titel'); 
        $table->dateTime('datum'); 
        $table->timestamps();
    });
}
```

#### 2. De Models (`Reservation.php` & `User.php`)
Voeg de relaties toe zodat je `$user->reservations` en `$reservation->user` kunt gebruiken.

#### 3. De Controller (`ReservationController.php`)
Gebruik `Auth::user()->reservations()->create($validated);` om de `user_id` automatisch in te vullen.

</details>

---

<h2 id="7-views--mappenstructuur">7. 🎨 Views & Mappenstructuur (Nieuwe schermen maken)</h2>

<details>
<summary><b>Klik om te begrijpen hoe we nieuwe schermen bouwen</b></summary>

<br>

* 📁 **`auth/`**: Inloggen en registreren.
* 📁 **`beheerder/`**: Schermen voor de admin-rol.
* 📁 **`gebruiker/`**: Schermen voor de gewone user-rol.
* 📁 **`components/`**: Herbruikbare stukjes zoals `<x-navbar />`.

**Layout gebruiken:**
In elk nieuw scherm gebruik je de layout component om de navbar en styling te krijgen:
```blade
<x-layout>
    <x-navbar />
    </x-layout>
```

</details>

---

<h2 id="8-hoe-werkt-het-rollensysteem">8. 🔐 Hoe werkt het Rollensysteem? (Nieuwe rol: bijv. Keuken of Directie)</h2>

<details>
<summary><b>Klik voor een stappenplan om een nieuwe rol toe te voegen</b></summary>

<br>

De rollen worden gecontroleerd op basis van de tekst in de `role` kolom van de `users` tabel.

### Voorbeeld: Rol 'Keuken' toevoegen
1. **Registratie:** Voeg `<option value="Keuken">Keuken</option>` toe aan `register.blade.php`.
2. **Mappen:** Maak de map `resources/views/keuken/`.
3. **Routes:** Beveilig je routes in `web.php` met de middleware: 
   ```php
   Route::middleware(['auth', 'role:Keuken'])->group(function () { ... });
   ```
4. **Navbar:** Toon linkjes alleen voor de juiste rol in `components/navbar.blade.php`.

</details>
