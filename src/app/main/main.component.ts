import { Component } from '@angular/core';
import { ProjetComponent } from './projet/projet.component';
import { GenerateurComponent } from './generateur/generateur.component';
import { AboutComponent } from './about/about.component';

@Component({
  selector: 'app-main',
  standalone: true,
  imports: [ProjetComponent,
            GenerateurComponent,
            AboutComponent],
  templateUrl: './main.component.html',
  styleUrl: './main.component.css'
})
export class MainComponent {

}
