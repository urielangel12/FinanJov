// Reemplaza con las credenciales de tu proyecto
const firebaseConfig = {
    apiKey: 'tu-api-key',
    authDomain: 'tu-auth-domain',
    projectId: 'appcars-364a6',
    storageBucket: 'tu-storage-bucket',
    messagingSenderId: 'tu-messaging-sender-id',
    appId: 'tu-app-id'
  };
  
  // Inicializa Firebase
  firebase.initializeApp(firebaseConfig);
  
  // Ahora puedes acceder a los servicios de Firebase, como la base de datos
  const database = firebase.database();
  