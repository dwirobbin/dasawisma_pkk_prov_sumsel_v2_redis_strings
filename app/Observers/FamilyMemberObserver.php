<?php

namespace App\Observers;

use App\Models\FamilyMember;

class FamilyMemberObserver
{
    /**
     * Handle the FamilyMember "created" event.
     */
    public function created(FamilyMember $familyMember): void
    {
        //
    }

    /**
     * Handle the FamilyMember "updated" event.
     */
    public function updated(FamilyMember $familyMember): void
    {
        //
    }

    /**
     * Handle the FamilyMember "deleted" event.
     */
    public function deleted(FamilyMember $familyMember): void
    {
        //
    }

    /**
     * Handle the FamilyMember "restored" event.
     */
    public function restored(FamilyMember $familyMember): void
    {
        //
    }

    /**
     * Handle the FamilyMember "force deleted" event.
     */
    public function forceDeleted(FamilyMember $familyMember): void
    {
        //
    }
}
