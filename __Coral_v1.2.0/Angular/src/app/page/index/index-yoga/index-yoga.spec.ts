import { ComponentFixture, TestBed } from '@angular/core/testing';

import { IndexYoga } from './index-yoga';

describe('IndexYoga', () => {
  let component: IndexYoga;
  let fixture: ComponentFixture<IndexYoga>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [IndexYoga]
    })
    .compileComponents();

    fixture = TestBed.createComponent(IndexYoga);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
