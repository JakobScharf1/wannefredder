import { ComponentFixture, TestBed } from '@angular/core/testing';

import { BlogAudioPost } from './blog-audio-post';

describe('BlogAudioPost', () => {
  let component: BlogAudioPost;
  let fixture: ComponentFixture<BlogAudioPost>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [BlogAudioPost]
    })
    .compileComponents();

    fixture = TestBed.createComponent(BlogAudioPost);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
