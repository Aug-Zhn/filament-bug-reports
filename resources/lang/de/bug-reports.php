<?php

declare(strict_types=1);

return [

    'navigation_label' => 'Bug Meldungen',
    'model_label' => 'Bug Meldung',
    'plural_model_label' => 'Bug Meldungen',
    'report_button' => 'Melden Sie einen Bug',

    'priority' => [
        'low' => 'Niedrig',
        'medium' => 'Mittel',
        'high' => 'Hoch',
        'urgent' => 'Dringend',
    ],

    'create' => [
        'title' => 'Melden Sie einen Bug',
        'breadcrumb' => 'Melden',
        'actions' => [
            'create' => 'Melden',
            'create_another' => 'Melden und fügen Sie einen Anderen hinzu.',
        ],
    ],

    'form' => [
        'title' => 'Was ist falsch gelaufen?',
        'title_placeholder' => 'Beschreiben Sie kurz das Problem, z.B "Ich kann keinen Ride speichern"',
        'steps' => 'Wie ist es passiert? (Schritt für Schritt)',
        'steps_helper' => 'Fügen Sie die Schritte hinzu, die sie gemacht haben bevor der Bug erschienen ist.',
        'step_placeholder' => 'z.B: Ich habe die Rides-Seite geöffnet',
        'add_step' => 'Schritt hinzufügen',
        'screenshot' => 'Screenshot (optional)',
        'screenshot_helper' => 'Ein Screenshot hilft uns schnell das Problem zu verstehen.',
        'priority' => 'Priorität',
        'priority_helper' => 'Wie dringed ist dieser Bug?',
    ],

    'table' => [
        'problem' => 'Problem',
        'priority' => 'Priorität',
        'github' => 'GitHub',
        'state' => 'Status',
        'state_pending' => 'In Bearbeitung',
        'state_resolved' => 'Gelöst',
        'screenshot' => 'Screenshot',
        'version' => 'Version',
        'reported_by' => 'Gemeldet von',
        'reported_at' => 'Gemeldet bei',
        'empty' => 'Keine Bug Meldungen',
        'untriaged' => 'Nicht gesichtet',
    ],

    'stats' => [
        'untriaged' => 'Erwarte Sichtung',
        'untriaged_description' => 'Gemeldet, aber noch nicht angesehen',
        'burning' => 'Dringend und Hoch',
        'burning_description' => 'Öffnen und schmerzen',
        'in_progress' => 'In Bearbeitung',
        'in_progress_description' => 'Öffne auf GitHub',
        'resolved' => 'Gelöst',
        'resolved_description' => 'Issue geschlossen',
    ],

    'filters' => [
        'priority' => 'Priorität',
        'validated' => 'Echte Bugs',
        'validated_true' => 'Markiert als echt',
        'validated_false' => 'Noch nicht behandelt',
    ],

    'actions' => [
        'mark_as_real' => 'Als echt markieren',
        'mark_as_real_heading' => 'Wollen Sie den Bug als echt markieren?',
        'mark_as_real_description' => 'Es wird ein Github Issue erstellt mit den Details und der gegebenen Priorität.',
        'mark_as_real_submit' => 'Erstelle Issue',
        'delete' => 'Löschen',
        'sync' => 'Synchronisiere mit GitHub',
        'open_issue' => 'Öffne Issue',
    ],

    'notifications' => [
        'reported' => 'Danke! Der Bug wurde gemeldet.',
        'issue_created' => 'GitHub Issue erstellt.',
        'issue_created_body' => 'Issue #:Nummer',
        'issue_failed' => 'Github Issue konnte nicht erstellt werden.',
        'deleted' => 'Bug Meldung gelöscht.',
        'synced' => 'Mit GitHub synchronisiert.',
        'synced_body' => 'Meldungen wurden geupdated: :count.',
        'sync_failed' => 'Synchronisierung fehlgeschlagen.',
    ],

    'issue' => [
        'not_configured' => 'GitHub ist nicht konfiguriert (bug-reports.github.token / repository).',
        'details' => 'Details',
        'reported_by' => 'Gemeldet von',
        'priority' => 'Priorität',
        'app_version' => 'App Version',
        'reported_at' => 'Gemeldet bei',
        'steps' => 'Schritte zum reproduzieren',
        'no_steps' => '_Keine Schritte angegeben._',
        'screenshot' => 'Screenshot',
        'no_screenshot' => '_Kein Screenshot._',
        'footer' => '_Automatisch erstellt von in-app bug report #:id._',
        'unknown_reporter' => 'Unbekannt',
    ],
];
