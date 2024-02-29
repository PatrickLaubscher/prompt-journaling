import { Routes } from '@angular/router';
import { PageNotFoundComponent } from './page-not-found/page-not-found.component';
import { ProjetComponent } from './main/projet/projet.component';
import { GenerateurComponent } from './main/generateur/generateur.component';

export const routes: Routes = [
    {path: 'accueil', component: ProjetComponent},
    {path:'generateur', component: GenerateurComponent},
    {path: '', redirectTo: '/accueil', pathMatch: 'full'},
    {path: '**', component: PageNotFoundComponent}
];
