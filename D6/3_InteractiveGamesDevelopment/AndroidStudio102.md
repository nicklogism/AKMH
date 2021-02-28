## 24.02.2021
### Δημιουργούμε μια απλή εφαρμογή
* Εξηγούμε το package name. 
    * Γιατί χρησιμοποιούμε URL ως package name; γιατί είναι unique.

### Βλέπουμε στοιχεία του αρχείου XML
* Name (App Name)
* Εισαγωγή εικόνας png (mipmap) - Icon
* Πάμε στο main activity (main function)

### Βλέπουμε τα στοιχεία του Layout folder
* Είναι καλό να δημιουργούμε ένα android:id ώστε να μπορούμε αργότερα να επικοινωνήσουμε το ενεργό κομμάτι κώδικα με το γραφικό στοιχείο. Τα ids τα δημιουργούμε για κάθε στοιχείο, πχ ConstraintLayout, TextView κλπ.

* Βλέπουμε τις ρυθμίσεις του width & height.<br>
Τιμή: wrap_content = να καταλάβει τόσο πλάτος (ή ύψος) όσο απαιτείται προκειμένου να χωράει τα περιεχόμενα που έχει μέσα.<br> Τιμή: match_parent = τόσο πλάτος (ή ύψος) όσο να καλύψει το πλάτος του containter του. Για το παράδειγμα μας το TextView έχει parent το ConstraintLayout. Επίσης, μπορούμε να βάλουμε και αριθμητικές τιμές.

* Εδώ, τα πάντα (από τιμές) στις οθόνες μετριούνται σε dp (dots per inch) και όχι σε pixels.

* android:textColor. Μπορούμε να φτιάξουμε και δική μας αναφορά σε χρώμα, την οποία θα καταχωρήσουμε μέσα στο colors.xml.

#### Βιβλιοθήκη app
* app:layout_contraintLeft_toLeftOf="parent"
    * Αντίστοιχα για Right, Bottom, Top και αφορά τη στοίχιση του αντικειμένου μας η οποία σε αυτή τη περίπτωση είναι σχετική με το parent (ConstraintLayout)

* layout_constraintHorizontal_bias αντίστοιχα και για το Vertical, δίνουμε τιμές από 0.0 έως 1.0 που υπολογίζουν την απόσταση που θα αφήσει το στοιχείο μας από το τέλος. Οι τιμές αυτές μετρούν συσχετίσεις (0.2 = 20% κλπ). Μπορούμε να ορίσουμε τιμές ακόμη και σε χιλιοστά , πχ 0.258

#### Εισάγουμε Plain Text στην εφαρμογή μας από το Design
* Ρυθμίζουμε το ύψος, πλάτος και ποσοστό σύμφωνα με το προηγούμενο (id:TextView1)
* Βλέπουμε μια ρύθμιση σχετικά με το Top, όπου ρυθμίζουμε τη συσχέτιση με το από πάνω στοιχείο. `layout_constraintTop_toBottomOf="@+id/textView1"`
* Βλέπουμε τις τιμές android:layout_marginStart & android:layout_marginEnd για στοίχιση του στοιχείου μας σε σχέση με την οθόνη του κινητού. πχ android:layout_marginStart="10dp" το στοιχίζει από αριστερά (Start) στα 10dp απόσταση.

#### Εισάγουμε άλλο ένα Text View (TextView2) με copy-paste τον κώδικα του TextView1
* Το ρυθμίζουμε αναλόγως αλλά σε σχέση με το id:TextName

#### Εισάγουμε ένα Button από το Design
* Το τοποθετούμε με τον ίδιο τρόπο με το TextView (copy-paste) και το ρυθμίζουμε αναλόγως.
* Το Button παίρνει το Primary Color που έχουμε δηλώσει στο Colors.xml. Για να το ρυθμίσουμε μεμονωμένα δηλώνουμε μέσα στο Button, `android:backgroundTint="@color/purple_700"`

### Πάμε στο κομμάτι του κώδικα (MainActivity)
* Να ρυθμίσουμε όταν πατάμε το Button να κάνει κάτι. πχ. να επιστρέφει στο TextView2 τη τιμή που έχει καταχωρήσει ο χρήστης στο TextView1.
* *Προσθέτουμε και τη ρύθμιση `android:hint` στο TextView1 που την είχαμε ξεχάσει προηγουμένως. Καταχωρούμε και ένα νέο string στο strings.xml με όνομα username_hint.*
* Σημ: H κλάση MainActivity είναι extended της AppCompatActivity. Ότι άλλη κλάση φτιάξουμε εμείς, πχ μια δική μας function με χαρακτηριστικά και στοιχεία, δεν θα έχει καμία επικοινωνία με τις λειτουργίες του τηλεφώνου, πχ κάμερα, μικρόφωνο κλπ. 
* Βλέπουμε τα functions που έχει, πχ το onCreate και προσθέτουμε άλλα τρια, onStart, onStop και onDestroy.
* Προσθέτουμε μηνύματα για τον Debugger `Log.d(TAG, "onStart");` ώστε να μπορούμε να δούμε τι τιμές περνάνε στις μεταβλητές μας σε διάφορα σημεία της εφαρμογής. Δηλ. να κάνουμε debugging. 
* `setContentView(R.layout.activity_main);` θέτουμε το view για την εφαρμογή μας. Μπορούμε να έχουμε περισσότερα από ένα layouts. 
* Καταχωρούμε τις μεταβλητές που χρειαζόμαστε, username, button, κλπ.
* Θέτουμε τον Listener για το buttonClick `button.setOnClickListener(buttonClick);`
* και δημιουργούμε και τη κλάση `private View.OnClickListener` 
* στην οποία γράφουμε τι θέλουμε να γίνει στο πάτημα του button. Δηλ. να παίρνει τα περιεχόμενα από το username και να τα τοποθετεί στο txt2. `txt2.setText(username.getText().toString());`

- - - -
* Βλ. Φάκελο App2 
* Βλ. Βίντεο:  %userprofile%\OneDrive\ShareX-Captures\24-02-2021
