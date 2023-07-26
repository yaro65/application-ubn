<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Niveau;
use App\Models\Cycle;
use App\Models\Filier;
use App\Models\Secretaire;
use App\Models\etudiant;
use Dompdf\Dompdf;
use PDF;
use App\Notifications\SendEtudiantEmail;
use Illuminate\Notifications\Notification;
class AppliControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('accueil');
    }

    public function connec()
    {
       return view('connexion');
    }

    // public function carte()
    // {
    //    return view('carte');
    // }

    public function inscrir()
    {
       return view('inscriptionad');
    }

    public function admi()
    {
       return view('admin');
    }
    public function secret()
    {
       $secretaires = Secretaire::all();
       return view('inscriptionsec' , [
        'secretaires' => $secretaires,
       ]);
    }
    public function etudiant()
    {
        $etudiants = etudiant::all();
        $cycles = Cycle::all();
        $filiers = Filier::all();
        $niveaux = Niveau::all();
        return view('ajouteretu', [
            'etudiants' => $etudiants,
            'cycles' => $cycles,
            'filiers' => $filiers,
            'niveaux' => $niveaux,  
        ]);
    }
    public function carte()
    {
        $etudiants = etudiant::all();
        return view('carte', [
            'etudiants' => $etudiants, 
        ]);
    }
    



    public function etudee()
    {
       return view('ajoueretudian');
    }

    public function secretair()
    {
       return view('secretaire');
    }
    public function secretai()
    {
       return view('connecsecretaire');
    }

    //enregistrement dans la base de données 



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Admin $admin, Request $request)
    {
      $admin = new Admin();
      $admin->email = $request->input('email');
      $admin->email_verified_at = null;
      $admin->telephone = $request->input('telephone');
      $admin->password = bcrypt($request->input('password'));
      $admin->save();
      return redirect()->route('insc')->with('status', 'Données enregistrées avec succès.');
    }

    public function stor(Secretaire $secrtaire, Request $request)
    {
        $secrtaire = new Secretaire();
        $secrtaire->name = $request->input('name');
        $secrtaire->email = $request->input('email');
        $secrtaire->email_verified_at = null;
        $secrtaire->telephone = $request->input('telephone');
        $secrtaire->password = bcrypt($request->input('password'));
        $secrtaire->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }


    public function connexion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $remember = $request->filled('remember');
        if (Auth::guard('admin')->attempt($credentials)){
            // Authentification réussie
            return redirect()->route('administ')->with('success', 'Connexion réussie !');
        } else {
            // Échec de l'authentification
            return redirect()->back()->with('error', 'Identifiants de connexion invalides. !'); 
        }
    }

    public function connexionsec(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('secretaire')->attempt($credentials)){
            // Authentification réussie
            return redirect()->route('secretaire')->with('success', 'Connexion réussie !');
        } else {
            // Échec de l'authentification
            return redirect()->back()->with('error', 'Identifiants de connexion invalides. !'); 
        }
    }


    public function niveau(Niveau $niveau, Request $request)
    {
        $niveau = new Niveau();
        $niveau->libelle_niveau = $request->input('libelle_niveau');
        $niveau->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }

    
    public function cylclee(Cycle $cycle, Request $request)
    {
        $cycle = new Cycle();
        $cycle->libelle_cycle = $request->input('libelle_cycle');
        $cycle->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }

    public function filier(Filier $filier, Request $request)
    {
        $filier = new Filier();
        $filier->libelle_filiere = $request->input('libelle_filiere');
        $filier->save();
        return redirect()->back()->with('success', 'Données enregistrées avec succès. !');
    }



    // public function creat()
    // {
    //     $cycles = Cycle::all();
    //     $filiers = Filier::all();
    //     $niveaux = Niveau::all();
    //     return view('ajouteretu',[
    //         'cycles' => $cycles,
    //         'filiers' => $filiers,
    //         'niveaux' => $niveaux,
    //     ]);
    // }


    //enregistrement de letudiant 

    public function etudian(etudiant $etudiant, Request $request)
{ 
    try{
        $etudiant = new etudiant();
        $etudiant->matricule = $request->input('matricule');
        $etudiant->nom = $request->input('nom');
        $etudiant->prenom = $request->input('prenom');
        $etudiant->date_naissace = $request->input('date_naissace');
        $etudiant->email = $request->input('email');
        $etudiant->sexe = $request->input('sexe');
        $etudiant->nationalite = $request->input('nationalite');
        $etudiant->filiere = $request->input('filiere');
        $etudiant->cycle = $request->input('cycle');
        $etudiant->niveau_detude = $request->input('niveau_detude');
        $etudiant->annee_accademique = $request->input('annee_accademique');
        if ($request->hasFile('image')) {
            $fileName = time() . $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->storeAs('public', $fileName);
            $etudiant->image = '/storage/' . $fileName;
        }
    // $etudiant->image = $request->input('image');
    $etudiant->save();

    if($etudiant){
        $etudiant->notify(new SendEtudiantEmail());
    } 

    // Rediriger ou effectuer d'autres actions après l'enregistrement
    return redirect()->back()->with('success', 'Données enregistrées avec succès');

    

    } catch (Exception $e){
        dd($e);
    }
   

    
}




    public function deconnexion()
    {
            Auth::logout();
            return redirect()->route('accuiel') ;// Redirige vers la page d'accueil ou toute autre page après la déconnexion
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }



//supprimer 

public function delete($id)
{
    $etudiant = etudiant::find($id);
    // Vérifie si l'utilisateur existe
    if (!$etudiant) {
        // Rediriger avec un message d'erreur si l'utilisateur n'est pas trouvé
        return redirect()->route('etude')->with('error', 'Utilisateur non trouvé.');
    }
    $etudiant->delete();
    return redirect()->route('etude')->with('success', 'Suppression réussie.');
} 




// public function sendPDFByEmail()
// {
//     $etudiants = \App\Models\etudiant::all(); // Récupérez vos données d'étudiants comme vous le faites actuellement
//     // Générez le HTML à partir de la vue
//     $html = view('carte1', compact('etudiants'))->render();
//     // Créez une instance de Dompdf
//     $dompdf = new Dompdf();
//     $dompdf->loadHtml($html);
//     // (Facultatif) Définissez les options de mise en page
//     $dompdf->setPaper('A4', 'portrait');
//     // Générez le PDF
//     $dompdf->render();

//     // Générez le contenu du PDF en tant que chaîne
//     $pdfContent = $dompdf->output();

//     // // Envoi du PDF par e-mail
//     // Mail::to('adresse_email_etudiant@example.com')->send(new ListeEtudiantsPDF($pdfContent));

//     return redirect()->back()->with('success', 'Le PDF a été envoyé par e-mail à l\'étudiant !');
// }

public function cartepdf($id)
{   
    $etudiant = etudiant::find($id);
    // return view('liste', [
    //     'user' => $user,
    // ]);
    // Créez une instance de Dompdf
    $dompdf = new Dompdf();

    // Récupérez le contenu de la vue en utilisant la méthode "render()"
    $bootstraphtml = view('carte1' , [
        'etudiant' => $etudiant,
    ])->render();
    
    // Chargez le HTML dans Dompdf
    $dompdf->loadHtml($bootstraphtml);

    // (Facultatif) Définissez les options de mise en page si nécessaire
    $dompdf->setPaper('A4', 'portrait');

    // Rendre le PDF
    $dompdf->render();


    // // Vous pouvez également afficher le PDF directement dans le navigateur en utilisant la méthode "stream()"
    $dompdf->stream('mon_pdf.pdf', ['Attachment' => false]);

    // // Redirigez l'utilisateur vers le lien de téléchargement du PDF
    return response()->download($pdfFilePath)->deleteFileAfterSend(true);

    
}


// public function sendEmailToStudents(Request $request)
// {
//     // Récupérer les informations nécessaires depuis le formulaire ou la base de données
//     $emailContent = "Bonjour chers étudiants, voici votre facture pour le mois de juillet.";
//     $pdfFilePath = storage_path('app/public/invoice.pdf'); // Chemin complet vers le fichier PDF

//     $etudiant = etudiant::all(); // Remplacez "Etudiant" par le nom de votre modèle

//     foreach ($etudiant as $etudiant) {
//         // Envoyer l'e-mail à chaque étudiant
//         Mail::to($etudiant->email)->send(new InvoiceEmail($emailContent, $pdfFilePath));
//     }

//     return redirect()->back()->with('success', 'E-mails sent successfully to all students.');
// }



// public function sendEmail()
// {
//     Mail::to('test@gmail.test')->send(new envoiEmail());
//     return view('mail');
// }

public function sendWelcomeEmail(Request $request, $etudiantId)
{
    $etudiant = etudiant::find($etudiantId); // Remplacez ceci par la façon dont vous récupérez l'utilisateur à qui envoyer l'e-mail
    $etudiant->notify(new SendEtudiantEmail());

    return redirect()->back()->with('success', 'Welcome email sent successfully.');
}


public function generatePDF() 
{         
    $etudiant = etudiant::find(); 
   
    $data = [
        'titre' => 'bonjour',
        'date'  => date('m/d/y'),
        'etudiants' => $etudiants
    ];
    $pdf = PDF::loadView('carte1', $data);
    return $pdf->download('laraveltuts.pdf');
}

}


