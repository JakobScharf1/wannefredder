import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { faqData } from '../../../data/data';

interface Faq{
  id: number;
  title: string;
  desc: string;
}

@Component({
  selector: 'app-faq-one',
  imports: [
    CommonModule,
    
  ],
  templateUrl: './faq-one.html',
  styleUrl: './faq-one.scss'
})
export class FaqOne {
  faqData:Faq[] = faqData

  activeTab:number = 1

  tabChange(index:number){ 
    this.activeTab = index
  }
}
