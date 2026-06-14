import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogHtmlAudio } from './blog-html-audio';

describe('BlogHtmlAudio', () => {
  let component: BlogHtmlAudio;
  let fixture: ComponentFixture<BlogHtmlAudio>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogHtmlAudio]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogHtmlAudio);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
