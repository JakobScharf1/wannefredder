import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { footerLink1, footerLink2, footerSocial } from '../../../data/data';

interface Social{
  icon: string;
  link: string;
}

interface Link{
  name: string;
  link: string;
}

@Component({
  selector: 'app-footer',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './footer.html',
  styleUrl: './footer.scss'
})
export class Footer {
  year:any

  ngOnInit(): void {
    this.year = new Date().getFullYear()
  }

  social:Social[] = footerSocial
  footerLink1:Link[] = footerLink1
  footerLink2:Link[] = footerLink2
}
