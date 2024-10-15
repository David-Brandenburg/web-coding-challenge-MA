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
