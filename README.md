# web-coding-challenge-MA

## Voraussetzungen

Um dieses Projekt auszuführen, benötigst du die folgenden Komponenten:

- **XAMPP** (Apache, MySQL, PHP und Perl)
- **MySQL** für die Datenbank

## Installation

### 1. XAMPP installieren

Falls du XAMPP noch nicht installiert hast, kannst du es [hier herunterladen](https://www.apachefriends.org/index.html) und installieren.

### 2. Datenbank erstellen

Sobald XAMPP läuft, richte die MySQL-Datenbank wie folgt ein:

1. Öffne phpMyAdmin (in XAMPP verfügbar unter `http://localhost/phpmyadmin`).
2. Erstelle eine neue Datenbank namens `accounts`.
3. Erstelle eine Tabelle in dieser Datenbank mit dem Namen `user` und füge die folgenden 5 Spalten hinzu:

   | Spaltenname   | Datentyp | Eigenschaften               |
   | ------------- | -------- | --------------------------- |
   | `id`          | INT      | AUTO_INCREMENT, PRIMARY KEY |
   | `email`       | TEXT     | NOT NULL                    |
   | `password`    | TEXT     | NOT NULL                    |
   | `user_delete` | INT      | Standardwert: NULL          |
   | `last_login`  | DATETIME | current_timestamp()         |

### 3. Repository klonen

1. Klone das Repository in das `htdocs`-Verzeichnis von XAMPP. Gehe dazu in das `htdocs`-Verzeichnis:

   https://github.com/David-Brandenburg/web-coding-challenge-MA von hier, das Repository clonen.

### 4. Project im Browser öffnen

Project im Browser über http://localhost/web-coding-challenge-MA/ öffnen

### 5. Benutzerregistrierung und Anmeldung

    Öffne die Webseite und registriere einen neuen Benutzer.
    Logge dich mit den registrierten Zugangsdaten ein.

### 6. Firma und Logo hochladen

    Nach dem Einloggen kannst du eine neue Firma hinzufügen.
    Lade ein Firmenlogo hoch, um das Formular abzuschließen.
