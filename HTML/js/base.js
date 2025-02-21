// Import the functions you need from the SDKs you need
import { initializeApp } from "firebase/app";
import { getAnalytics } from "firebase/analytics";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
const firebaseConfig = {
  apiKey: "AIzaSyDc59iIxpvfKJSj4mi8I70H5jRM5lrW3vg",
  authDomain: "sistemas-de-citas.firebaseapp.com",
  projectId: "sistemas-de-citas",
  storageBucket: "sistemas-de-citas.firebasestorage.app",
  messagingSenderId: "880067201120",
  appId: "1:880067201120:web:d5c8bfda4ec4cc0b5c1b05",
  measurementId: "G-2HPY9R0ML1"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
const analytics = getAnalytics(app);