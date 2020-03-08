<?php

namespace App\Http\Requests;

use App\Models\Room;
use Illuminate\Foundation\Http\FormRequest;

class AddPlaylistItem extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $room = Room::where('name', $this->route('room'))->first();
        $user = \Auth::getUser();

        return $user !== null && $user->rooms->whereIn('id', [$room->id])->isNotEmpty();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
