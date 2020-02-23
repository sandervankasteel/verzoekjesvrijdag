import RoomSelectionIndex from "./pages/RoomCreateOrJoin";
import Room from "./pages/Room";

export default {
    routes: [
        {
            path: '/',
            name: 'home',
            component: RoomSelectionIndex
        },
        {
            path: '/room/:id',
            name: 'room',
            component: Room
        }
    ]
}
