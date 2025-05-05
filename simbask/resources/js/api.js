import axios from 'axios';

const api = axios.create({
    baseURL: '/api', // Laravel sirve las APIs en /api
});

// Coaches
export const getCoaches = () => api.get('/coaches');
export const createCoach = (data) => api.post('/coaches', data);
export const updateCoach = (id, data) => api.put(`/coaches/${id}`, data);
export const deleteCoach = (id) => api.delete(`/coaches/${id}`);

// Games
export const getGames = () => api.get('/games');
export const createGame = (data) => api.post('/games', data);
export const updateGame = (id, data) => api.put(`/games/${id}`, data);
export const deleteGame = (id) => api.delete(`/games/${id}`);

// Leagues
export const getLeagues = () => api.get('/leagues');
export const createLeague = (data) => api.post('/leagues', data);
export const updateLeague = (id, data) => api.put(`/leagues/${id}`, data);
export const deleteLeague = (id) => api.delete(`/leagues/${id}`);

// Players
export const getPlayers = () => api.get('/players');
export const createPlayer = (data) => api.post('/players', data);
export const updatePlayer = (id, data) => api.put(`/players/${id}`, data);
export const deletePlayer = (id) => api.delete(`/players/${id}`);

// Referees
export const getReferees = () => api.get('/referees');
export const createReferee = (data) => api.post('/referees', data);
export const updateReferee = (id, data) => api.put(`/referees/${id}`, data);
export const deleteReferee = (id) => api.delete(`/referees/${id}`);

// Stadiums
export const getStadiums = () => api.get('/stadiums');
export const createStadium = (data) => api.post('/stadiums', data);
export const updateStadium = (id, data) => api.put(`/stadiums/${id}`, data);
export const deleteStadium = (id) => api.delete(`/stadiums/${id}`);

// Teams
export const getTeams = () => api.get('/teams');
export const createTeam = (data) => api.post('/teams', data);
export const updateTeam = (id, data) => api.put(`/teams/${id}`, data);
export const deleteTeam = (id) => api.delete(`/teams/${id}`);

// Users
export const getUsers = () => api.get('/users');
export const createUser = (data) => api.post('/users', data);
export const updateUser = (id, data) => api.put(`/users/${id}`, data);
export const deleteUser = (id) => api.delete(`/users/${id}`);