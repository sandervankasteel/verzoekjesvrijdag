import RoomSelectionIndex from "./pages/RoomCreateOrJoin";
import Room from "./pages/Room";
import room from "./store/modules/room"

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
            component: Room,
            beforeEnter: (to, from, next) => {
                if(!room.getters.hasJoinedRoom()) {
                    next({name: 'home'});
                }
                else next()
            }
        }
    ]
}
