import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';

@Component({
  selector: 'app-blog-comments',
  imports: [
    CommonModule,
    RouterLink
  ],
  templateUrl: './blog-comments.html',
  styleUrl: './blog-comments.scss'
})
export class BlogComments {

}
