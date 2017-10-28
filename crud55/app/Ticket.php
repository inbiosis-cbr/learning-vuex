<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    protected $fillable = ['user_id', 'title', 'description'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ticket';

    public function saveTicket($data)
    {
            $this->user_id = auth()->user()->id;
            $this->title = $data['title'];
            $this->description = $data['description'];
            $this->save();
            return 1;
    }

    public function updateTicket($data)
    {
        $ticket = $this->find($data['id']);
        $ticket->user_id = auth()->user()->id;
        $ticket->title = $data['title'];
        $ticket->description = $data['description'];
        $ticket->save();
        return 1;
    }

    public function destroyTicket($data)
    {
        $ticket = $this->find($data['id']);
        $ticket->delete();
        return 1;
    }
}
