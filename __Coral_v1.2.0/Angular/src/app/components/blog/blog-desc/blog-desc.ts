import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-blog-desc',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './blog-desc.html',
  styleUrl: './blog-desc.scss'
})
export class BlogDesc {

}
