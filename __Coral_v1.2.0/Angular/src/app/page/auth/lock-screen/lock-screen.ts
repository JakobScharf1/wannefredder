import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-lock-screen',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './lock-screen.html',
  styleUrl: './lock-screen.scss'
})
export class LockScreen {

}
