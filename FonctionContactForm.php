<?php

function FormContact() {
    // Vérifier si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Vérifier si les champs requis sont renseignés
        if (isset($_POST['Nom']) && isset($_POST['Email']) && isset($_POST['Message']) && !empty($_POST['Nom']) && !empty($_POST['Email']) && !empty($_POST['Message'])) {
            // Récupérer les données du formulaire
            $nom = htmlspecialchars($_POST['Nom']);
            $prenom = htmlspecialchars($_POST['Prenom']);
            $email = htmlspecialchars($_POST['Email']);
            $telephone = htmlspecialchars($_POST['Telephone']);
            $message = htmlspecialchars($_POST['Message']);

            // Construire le message
            $email_body = "Nom: $nom\n";
            if (!empty($prenom)) {
                $email_body .= "Prénom: $prenom\n";
            }
            $email_body .= "Email: $email\n";
            if (!empty($telephone)) {
                $email_body .= "Téléphone: $telephone\n\n";
            }
            $email_body .= "Message:\n$message";

            // Adresse email de destination
            $to = "timeo.dns@gmail.com";

            // Sujet de l'email
            $subject = "Nouveau message de $nom";

            // Entêtes de l'email
            $headers = "From: titimeo.d@gmail.com\r\n";
            $headers .= "Reply-To: $email\r\n";
            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

            // Envoyer l'email
            if (mail($to, $subject, $email_body, $headers)) {
                // Envoi réussi, renvoyer une réponse succès à la requête AJAX
                echo "success";
                return true;
            } else {
                // Erreur lors de l'envoi de l'email, renvoyer une réponse d'erreur à la requête AJAX
                echo "error";
                return false;
            }
        } else {
            // Les champs requis ne sont pas renseignés, renvoyer une réponse d'erreur à la requête AJAX
            echo "error";
            return false;
        }
    } else {
        // Le formulaire n'a pas été soumis via POST, renvoyer une réponse d'erreur à la requête AJAX
        echo "error";
        return false;
    }
}

?>
