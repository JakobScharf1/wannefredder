import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-signup',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './signup.html',
  styleUrl: './signup.scss'
})
export class Signup {

}
