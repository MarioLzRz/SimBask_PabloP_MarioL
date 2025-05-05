import React, { useState } from 'react';
import axios from 'axios';

function Register() {
    // Estado para los datos del formulario
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    // Estado para manejar errores o mensajes de éxito
    const [error, setError] = useState(null);
    const [success, setSuccess] = useState(null);

    // Manejar cambios en los campos del formulario
    const handleChange = (e) => {
        setFormData({
            ...formData,
            [e.target.name]: e.target.value,
        });
    };

    // Manejar el envío del formulario
    const handleSubmit = async (e) => {
        e.preventDefault(); // Evitar el comportamiento predeterminado del formulario

        try {
            // Enviar datos al backend
            const response = await axios.post('/api/register', formData);

            // Si es exitoso, mostrar un mensaje de éxito
            setSuccess('Usuario registrado exitosamente.');
            setError(null); // Limpiar errores

            // Reiniciar los campos del formulario
            setFormData({
                name: '',
                email: '',
                password: '',
                password_confirmation: '',
            });

            console.log(response.data); // Mostrar datos del servidor en consola
        } catch (err) {
            // Si hay errores, manejarlos
            setError(err.response?.data?.message || 'Ocurrió un error.');
            setSuccess(null); // Limpiar mensajes de éxito
        }
    };

    return (
        <div>
            <h1>Formulario de Registro</h1>

            {error && <p style={{ color: 'red' }}>{error}</p>}
            {success && <p style={{ color: 'green' }}>{success}</p>}

            <form onSubmit={handleSubmit}>
                <div>
                    <label htmlFor="name">Nombre</label>
                    <input
                        type="text"
                        name="name"
                        value={formData.name}
                        onChange={handleChange}
                        required
                    />
                </div>
                <div>
                    <label htmlFor="email">Correo Electrónico</label>
                    <input
                        type="email"
                        name="email"
                        value={formData.email}
                        onChange={handleChange}
                        required
                    />
                </div>
                <div>
                    <label htmlFor="password">Contraseña</label>
                    <input
                        type="password"
                        name="password"
                        value={formData.password}
                        onChange={handleChange}
                        required
                    />
                </div>
                <div>
                    <label htmlFor="password_confirmation">Confirmar Contraseña</label>
                    <input
                        type="password"
                        name="password_confirmation"
                        value={formData.password_confirmation}
                        onChange={handleChange}
                        required
                    />
                </div>
                <button type="submit">Registrar</button>
            </form>
        </div>
    );
}

export default Register;