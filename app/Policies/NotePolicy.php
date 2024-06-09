<?php

namespace App\Policies;

use App\Models\Note;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class NotePolicy
{
   
    public function view(User $user, Note $note)
{
    return $user->id === $note->task->user_id;
}

public function update(User $user, Note $note)
{
    return $user->id === $note->task->user_id;
}

public function delete(User $user, Note $note)
{
    return $user->id === $note->task->user_id;
}

}
