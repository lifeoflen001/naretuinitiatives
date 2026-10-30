# Naretu Initiatives

Source snapshot for the Naretu Initiatives charity website. It contains Laravel/PHP controllers and models, Blade templates, and bundled frontend assets for the organization's public pages and account workflows.

## Included source

- About, causes, donations, events, gallery, testimonials, careers, and volunteer templates.
- Contact, comments, subscriptions, authentication, and user-management controllers.
- Google authentication integration and role/permission dependencies.
- Bootstrap, jQuery, Alpine.js, Tailwind CSS, Vite, and Pifoxen theme assets.

These files document the implemented source; payment processing and other external integrations require their own configuration and verification.

## Technology

The manifest requires PHP `^8.2` and Laravel `^12.0`, with Laravel Breeze, Socialite, and Spatie Laravel Permission. Frontend scripts use Vite.

## Important: repository layout

This checkout is a **flattened source snapshot**, rather than a complete conventional Laravel application. Controllers, configuration files, templates, and assets are stored together at the root. Expected directories such as `app/`, `bootstrap/`, `routes/`, `resources/`, and `public/` are absent.

Consequently, a fresh clone is not ready to run with `php artisan serve` or the manifest's setup script.

## Working with the snapshot

```bash
git clone https://github.com/lifeoflen001/naretuinitiatives.git
cd naretuinitiatives
```

To reconstruct a runnable application:

1. Restore the original Laravel directory structure from a complete application copy, if available.
2. Place controllers and models according to their PHP namespaces, and templates according to their `view(...)` references.
3. Restore bootstrap files, routes, migrations, configuration, and the public entry point.
4. Create a clean local environment configuration and a separate development database.
5. Install the locked dependencies, generate an application key, run reviewed migrations, and build the frontend only after the structure is complete.

Do not treat the committed environment file or database snapshot as a development configuration or sample dataset. Keep credentials and personal data out of documentation and future commits.

## Source navigation

| Files | Purpose |
| --- | --- |
| `PageController.php` | Public page/view references |
| `ContactController.php`, `CommentController.php` | Visitor interactions |
| `SubscriberController.php` | Subscription handling |
| `GoogleController.php` | Google authentication |
| `*.blade.php` | Page, layout, and authentication templates |
| `composer.json`, `package.json` | Dependency requirements and scripts |

## Validation

After restoring the application structure, use `php artisan route:list`, `php artisan test`, and `npm run build` to check integration. Their presence in a manifest does not establish that the current flattened snapshot can execute them.
