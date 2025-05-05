import React from 'react';
import ReactDOM from 'react-dom/client';
import Register from './components/Register';

const App = () => (
    <div>
        <h1>Bienvenido a la App</h1>
        <Register />
    </div>
);

const root = ReactDOM.createRoot(document.getElementById('app'));
root.render(<App />);