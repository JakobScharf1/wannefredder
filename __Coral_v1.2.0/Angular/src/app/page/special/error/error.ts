import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-error',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './error.html',
  styleUrl: './error.scss'
})
export class Error {
  year:any

  ngOnInit(): void {
    this.year = new Date().getFullYear()
  }
}
