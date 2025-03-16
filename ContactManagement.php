<?php
// Contact Management Terminal-Based App
$contacts = [];

// Function to add a contact
function addContact(array &$contacts, string $name, string $email, string $phone): void {
    $contacts[] = ['name' => $name, 'email' => $email, 'phone' => $phone];
}

// Function to display all contacts
function displayContacts(array $contacts): void {
    if (empty($contacts)) {
        echo "No contacts available.\n";
    } else {
        foreach ($contacts as $contact) {
            echo "Name: {$contact['name']}, Email: {$contact['email']}, Phone: {$contact['phone']}\n";
        }
    }
}

// Terminal-based interface
while (true) {
    echo "\nContact Management Menu:\n";
    echo "1. Add Contact\n2. View Contacts\n3. Exit\n";
    echo "Choose an option: ";
    
    $choice = trim(fgets(STDIN));  // Alternative to readline()
    
    if ($choice === '1') {
        echo "Enter name: ";
        $name = trim(fgets(STDIN));

        echo "Enter email: ";
        $email = trim(fgets(STDIN));

        echo "Enter phone number: ";
        $phone = trim(fgets(STDIN));

        addContact($contacts, $name, $email, $phone);
        echo "$name added to contacts.\n";
    } elseif ($choice === '2') {
        displayContacts($contacts);
    } elseif ($choice === '3') {
        echo "Exiting...\n";
        break;
    } else {
        echo "Invalid choice. Please try again.\n";
    }
}
